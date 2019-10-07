from .config import app, decor

STRINGS = app["folder"]["strings"]
EXCLUDE = app["exclude"][0]


@decor(STRINGS, EXCLUDE)
def test_strings():
    pass
