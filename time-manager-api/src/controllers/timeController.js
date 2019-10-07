/**
 * File containing results for endpoints
 */

// Modules
const fs = require('fs');
const path = require('path')
// File to simulate database
const file = path.resolve('database/rules.json');

/** 
 * Listar regras de horários para atendimento
*/
exports.getAll = (req, res, next) => {
    fs.readFile(file, 'utf8', function (err, data) {
        if (err) throw err;
        res.end(data);
    });
};

/** 
 * Cadastrar regras de horários para atendimento
*/
exports.post = (req, res, next) => {

    fs.readFile(file, 'utf8', function (err, data) {
        let rules = JSON.parse(data);

        if (err) throw err;

        // function saoIguais(objetoA, objetoB) {
        //     let aChaves = Object.keys(objetoA),
        //         bChaves = Object.keys(objetoB);
        
        //     if (aChaves.length != bChaves.length) {
        //         return false;
        //     }
        
        //     let saoDiferentes = aChaves.some((chave) => {
        //         return objetoA[chave] !== objetoB[chave];
        //     });

        //     return !saoDiferentes;
        // }

        (req.body).forEach(element => {

            let cond = element.cond;
            let interval = element.intervals;
            
            if (rules[cond])
            {
                interval.forEach(i => {
                    rules[cond].push(i);
                });
            }
            else
            {
                rules[cond] = interval;
            }

            rules = JSON.stringify(rules, null, '\t');

            fs.writeFile(file, rules, 'utf8', (err) => {
                if (err) throw err;
                console.log('The file has been saved!');
            });

            res.end(rules);
        });

    });
};

/**
 * Apagar regra de horário para atendimento
 */
exports.delete = (req, res, next) => {
    fs.readFile(file, 'utf8', function (err, data) {
        let rules = JSON.parse(data);

        if (err) throw err;

        (req.body).forEach(element => {

            let cond = element.cond;
            let keys = element.keys.sort().reverse();
            
            if (rules[cond])
            {
                keys.forEach(k => {
                    rules[cond].splice(k, 1);
                });
            }

            rules = JSON.stringify(rules, null, '\t');

            fs.writeFile(file, rules, 'utf8', (err) => {
                if (err) throw err;
                console.log('The file has been saved!');
            });

            res.end(rules);
        });

    });
};

/**
 * Listar horários disponíveis dentro de um intervalo
 */
exports.getTimes = (req, res, next) => {

    fs.readFile(file, 'utf8', function (err, data) {
        const weekday =  ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
        const pattern = /(\d{2})\-(\d{2})\-(\d{4})/;
        let date_start = req.params.start;
        let date_end = req.params.end;
        let all_times = [];
        
        let rules = JSON.parse(data);

        let fd_start = new Date(date_start.replace(pattern, '$3/$2/$1'));
        let fd_end = new Date(date_end.replace(pattern, '$3/$2/$1'));

        if (err) throw err;
        
        let times = {};
        while (fd_start <= fd_end)
        {
            if (rules[date_start])
            {
                times['day'] = date_start;
                times['intervals'] = rules[date_start];
            }

            let day = weekday[fd_start.getDay()];
            if (rules[day])
            {
                if (!times['day'])
                    times['day'] = date_start;
                if (times['intervals'])
                    (rules[day]).forEach(i => {
                        times['intervals'].push(i);
                    });
                else
                    times['intervals'] = rules[day];
            }
            
            if (rules['daily'])
            {
                if (!times['day'])
                    times['day'] = date_start;
                if (times['intervals'])
                    (rules['daily']).forEach(i => {
                        times['intervals'].push(i);
                    });
                else
                    times['intervals'] = rules['daily'];
            }

            all_times.push(times);
            times = {};

            fd_start.setDate(fd_start.getDate() + 1);
            date_start = fd_start.getDate() + "-" + (fd_start.getMonth() + 1) + "-" + fd_start.getFullYear();
        }

        all_times = JSON.stringify(all_times, null, '\t');
        res.end(all_times);

    });
};