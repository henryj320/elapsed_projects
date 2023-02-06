"""This page uses flask to show a webpage on a set host and port.

Because the file is called app.py, You can run it with flask run. When it isn't called app.py,
you can run it with flask --app basic_file run. Note that when you run this with flask run --host=0.0.0.0
then it can be accessed from any machine on the same network.
"""

import os
from flask import Flask

app = Flask(__name__)


@app.route("/")
def hello_world():
    """When triggered by going to http://127.0.0.1:5000/, it prints "Hello world!".

    Returns:
        str: HTML saying "Hello world!"
    """
    return "<p>Hello world!<br>__name__ is {}</p>".format(__name__)


@app.route("/receive")  # Page shows when path is http://127.0.0.1:5000/receive
def receive():
    """When triggered by going to http://127.0.0.1:5000/receive, it prints "In receiver page".

    Returns:
        str: HTML saying "In receiver page"
    """
    return "<p>In receiver page</p>"


# if __name__ == '__main__':  # Never entered at the moment
#    app.run(host="0.0.0.0", port=8000, debug=True)
