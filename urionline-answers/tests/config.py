import subprocess
import re

app = {
    "folder": {"beginner": "beginner", "strings": "strings"},
    "exclude": [r"(^_|.*unresolve\])"],
}


def decor(file, exclude):
    def wrapper(f):
        dirs = subprocess.os.listdir(file)
        for d in dirs:
            if re.search(exclude, d) is None:
                f_in = "{mdir}/{dirs}/{dirs}.py".format(mdir=file, dirs=d)
                f_out = "{}/{}/.out".format(file, d)
                param = "<{}/{}/in".format(file, d)
                cmd = "python3 {} {}".format(f_in, param)

                buffer = open(f_out, "w")
                subprocess.call([cmd], stdout=buffer, shell=True)
                buffer.close()

                buffer_result = open(f_out, "r")
                result = buffer_result.read()

                f_expected = "{}/{}/expected".format(file, d)
                buffer_expected = open(f_expected, "r")
                expected = buffer_expected.read()

                assert result == expected

        return f

    return wrapper
