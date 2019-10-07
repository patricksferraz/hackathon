from .config import app, decor

BEGINNER = app["folder"]["beginner"]
EXCLUDE = app["exclude"][0]


@decor(BEGINNER, EXCLUDE)
def test_beginner():
    pass
