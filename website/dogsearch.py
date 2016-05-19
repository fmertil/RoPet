import time
from rssi import *
from search import *
from face import *
    
# Three states: wait, search, run
state = "ready"
prev_rssi = 0
rssi = 0
is_found = False

def dogsearch()
    while True:
        # get origin rssi
        print "=========state: %s===========" %(state)
        prev_rssi = rssi
        if state == "ready":
            rssi = rssimean()
            state = "wait"

        elif state == "wait":
            rssi = rssimean()
            # rssi increase, dog moves closer so bot keeps waiting
            print "--prev_rssi is : %s --" %(prev_rssi)
            if rssi > prev_rssi:
                state = "wait"
                time.sleep(5)
            # rssi decrease, dog moves further so go to search
            else:
                state = "search"

        elif state == "search":
            # robot run circle and find the right point
            rssi_max = circle()
            print "start turn 90 degree"
            turn(1)
            state = "run"

        elif state == "run":
            is_found = forward(8, rssi_max)
            if is_found:
                print "find dog!"
                break

            else:
                state = "wait"
 

