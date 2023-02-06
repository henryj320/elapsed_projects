"""Setup file."""
import setuptools
from setuptools import setup

setup(
    name="basic_messaging",
    version="1.0",
    description="""A basic messaging app. Effectively a prerequisite for tcp_message_sender_and_receiver. Use Flask to send a
    string from one endpoint (host:port pair) to another Python script.""",
    author="Henry James",
    author_email="henryj320@gmail.com",
    packages=setuptools.find_packages(where="src", exclude=("tests",)),
    install_requires=[], # external packages required
    python_requires=">=3.8"
)
