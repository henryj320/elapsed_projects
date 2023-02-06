"""Setup file."""
import setuptools
from setuptools import setup

setup(
    name="python_on_iot",
    version="1.0",
    description="An introductory project to look into running Flask apps on an Arduino or Raspberry Pi. Look into running Python code using an IoT device.",
    author="Henry James",
    author_email="henryj320@gmail.com",
    packages=setuptools.find_packages(where="src", exclude=("tests",)),
    install_requires=[], # external packages required
    python_requires=">=3.8"
)
