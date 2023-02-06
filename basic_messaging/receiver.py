"""This is the receiver (server) to receive TCP and UDP messages."""

import sys
import os
import socket

failed_hosts = [
    "127.0.0.1",
    "Henry-Ideapad_Ubuntu",
    "192.168.1.1",
    "209.35.89.171"]

HOST = "0.0.0.0"
PORT = 8001


def tcp():
    """Open a server connection waiting for a tcp message."""
    with socket.socket(socket.AF_INET, socket.SOCK_STREAM) as s:
        # socket.socket() creates a socket object inside with so that it auto runs socket.close at the end().
        # AF_INET is the internet address family - i.e. IPv4 or IPv6.
        # SOCK_STREAM is the socket type for TCP.

        s.bind((socket.gethostname(), PORT))  # Links the socket to the to the interface and port number.

        s.listen(5)  # Turns the server into a listening socket that accepts 5  incoming connections.
        conn, addr = s.accept()  # Blocks execution until a client connects. Returns a tuple with the connection and address.
        with conn:  # When a client connects.
            print(f"Connected by {addr}")
            while True:
                data = conn.recv(1024)  # Reads the data from the client.
                if not data:  # Ends when an empty byte object is received.
                    break
                conn.sendall(data)  # Echoes the data received


def udp():
    """Set the server to be waiting to receive a UDP message."""
    addr = (HOST, PORT)
    buf = 1024  # Sets the UDP buffer size
    UDPSock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)  # Creates a socket object.
    # SOCK_DGRAM is the socket type for UDP.
    UDPSock.bind(addr)  # Links the socket to the interface and port number.
    print("Waiting to receive...")
    while True:
        (data, addr) = UDPSock.recvfrom(buf)  # Receives the data and addr from the buffer.
        data = data.decode()  # The data is a byte-like object, so this converts is back to str.
        print(data)
        if data == "exit":  # Stops the server from running when 'exit' is sent.
            break
    UDPSock.close()
    os._exit(0)


# Makes it so the user sends the function called with python receiver.py tcp
if __name__ == '__main__':
    try:
        globals()[sys.argv[1]]()
        # To add more parameters, do globals()[sys.argv[1]](sys.argv[2])
    except IndexError:
        print("You need to add the function call. E.g. 'python receiver.py tcp'")
