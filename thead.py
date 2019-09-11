#coding=utf-8
import time
from threading import Thread

class MyThread(Thread):
    def __init__(self, name="Python"):
        super().__init__()
        self.name=name

    # 定义一个类
    def run(self):
        for i in range(2):
            print("hello", self.name)
            time.sleep(1)

if __name__ == '__main__':
    thread_01 = MyThread()
    thread_02 = MyThread("MING")

    thread_01.start()
    thread_02.start()
