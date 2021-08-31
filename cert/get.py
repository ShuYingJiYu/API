import requests as rq
import os
import json

# replace your own url to cert api
url = ''
t = json.loads(rq.get(url).text)

# replace your own route to cert and key
dir = ''
os.chdir(dir)

f = open('fullchain.pem', 'w+')
f.write(t['cert'])
f.close()

f = open('privkey.pem', 'w+')
f.write(t['key'])
f.close()
