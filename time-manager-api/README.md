# TIME MANAGER

API developer for the company Cubos as selection stage

## Cloning

```sh
$ git clone https://github.com/patricksferraz/time-manager.git
$ cd time-manager
$ npm install   // to install the dependencies
$ npm start     // to execute
```

## Usage

Postman was used for all examples

### Endpoints

#### Cadastrar regras de horário para atendimento

* Input format [method POST: http://localhost:3000/times]

```js
// json file to submit
[
	{
		"cond": "25/03/2019",
		"intervals" : [
	        {"start": "17:30", "end": "20:00"},
	        {"start": "20:10", "end": "23:30"}
	    ]
	}
]
```

Where:
```
"cond" =
    for day: 'DD/MM/YYYY|sun'
    for wek: 'sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'
    for daily: 'daily'

"intervals" = 
    [one or more Object {"start": hour, "end": hour}]
```


* Output [File database/rules.json]

```js
{
    "25/03/2019": [
        {"start": "17:30", "end": "20:00"},
        {"start": "20:10", "end": "23:30"}
    ]
}
```

#### Apagar regra

* Input format [method DELETE: http://localhost:3000/times]

```js
// json file to submit
[
	{
		"cond": "25/03/2019",
		"keys" : [0]
	}
]
```

Where:
```
"cond" =
    for day: 'DD/MM/YYYY|sun'
    for wek: 'sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'
    for daily: 'daily'

"keys" = 
    [one or more integers representing the key]
```


* Output [File database/rules.json]

```js
{
    "25/03/2019": [
        {"start": "20:10", "end": "23:30"}
    ]
}
```

#### Listar regras

* Input format [method GET: http://localhost:3000/times]

```js
// File database/rules.json
{
    "25/03/2019": [
        {"start": "20:10", "end": "23:30"}
    ]
}
```

* Output [API return]

```js
{
    "25/03/2019": [
        {"start": "20:10", "end": "23:30"}
    ]
}
```

#### Horários disponíveis

* Input format [method GET: http://localhost:3000/times/:start/:end]

```js
// start = 25-01-2018
// end   = 29-01-2018
// File database/rules.json
{
	"25-01-2018": [
		{
			"start": "17:30",
			"end": "20:00"
		},
		{
			"start": "20:10",
			"end": "23:30"
		}
	],
	"sun": [
		{
			"start": "14:30",
			"end": "15:00"
		},
		{
			"start": "15:10",
			"end": "15:30"
		}
	],
	"mon": [
		{
			"start": "14:30",
			"end": "15:00"
		},
		{
			"start": "15:10",
			"end": "15:30"
		},
		{
			"start": "7:30",
			"end": "12:00"
		}
	],
	"daily": [
		{
			"start": "7:30",
			"end": "12:00"
		}
	]
}
```

* Output [API return]

```js
[
	{
		"day": "25-01-2018",
		"intervals": [
			{
				"start": "17:30",
				"end": "20:00"
			},
			{
				"start": "20:10",
				"end": "23:30"
			},
			{
				"start": "7:30",
				"end": "12:00"
			}
		]
	},
	{
		"day": "26-1-2018",
		"intervals": [
			{
				"start": "7:30",
				"end": "12:00"
			}
		]
	},
	{
		"day": "27-1-2018",
		"intervals": [
			{
				"start": "7:30",
				"end": "12:00"
			}
		]
	},
	{
		"day": "28-1-2018",
		"intervals": [
			{
				"start": "14:30",
				"end": "15:00"
			},
			{
				"start": "15:10",
				"end": "15:30"
			},
			{
				"start": "7:30",
				"end": "12:00"
			}
		]
	},
	{
		"day": "29-1-2018",
		"intervals": [
			{
				"start": "14:30",
				"end": "15:00"
			},
			{
				"start": "15:10",
				"end": "15:30"
			},
			{
				"start": "7:30",
				"end": "12:00"
			},
			{
				"start": "7:30",
				"end": "12:00"
			}
		]
	}
]
```

## More

To use this examples, import the file Requests.postman_collection.json in the Postman