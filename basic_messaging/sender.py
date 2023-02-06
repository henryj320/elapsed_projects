"""This is the sender (client) to send TCP and UDP messages."""

import sys
import socket
import os

failed_hosts = ["127.0.0.1", "Henry-Ideapad_Ubuntu", "0.0.0.0", "192.168.1.1", "209.35.89.171"]
HOST = "192.168.1.101"  # Allows communication with receiver on 0.0.0.0 8001
PORT = 8001


def tcp():
    """Send a TCP message to a server running locally on port 8001."""
    with socket.socket(socket.AF_INET, socket.SOCK_STREAM) as s:
        # socket.socket() creates a socket object inside with so that it auto runs socket.close at the end().
        try:
            s.connect((HOST, PORT))
            s.sendall(b"Hello there!")  # Sends this to the server
            data = s.recv(1024)  # Receives the response from the server. Not sure if it works.

            print(f"Received {data!r}")

        except ConnectionRefusedError:
            print("receiver.py is not running on the host:port stated")


def udp():
    """Send a UDP message to a server running locally on port 8001."""
    addr = (HOST, PORT)
    UDPSock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)

    while True:
        data = input("Enter message to send or type 'exit': ")
        UDPSock.sendto(str.encode(data), addr)
        if (data == "exit"):
            break
    UDPSock.close()
    os._exit(0)


# Makes it so the user sends the function called with python sender.py tcp
if __name__ == '__main__':
    try:
        globals()[sys.argv[1]]()
        # To add more parameters, do globals()[sys.argv[1]](sys.argv[2])
    except IndexError:
        print("You need to add the function call. E.g. 'python sender.py tcp'")
