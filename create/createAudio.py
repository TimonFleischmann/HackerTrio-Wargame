import wave, struct, math, random, sys
sampleRate = 44100.0 # hertz
duration = 1.0 # seconds
frequency = 440.0 # hertz

obj = wave.open(sys.argv[1]+'.wav','w')
obj.setnchannels(1) # mono
obj.setsampwidth(2)
obj.setframerate(sampleRate)
file1 = open(sys.argv[1], 'r')
Lines = file1.readlines()

value = 0
data = struct.pack('<h', value)
obj.writeframesraw( data )
value = 0
data = struct.pack('<h', value)
obj.writeframesraw( data )
    
for line in Lines:
    if int(line.strip()) == 1:
        value = 29800
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 28788
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 14963
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 12079
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 30583
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 11895
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 28537
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 29813
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        
        value = 25205
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 11877
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 28515
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 12141
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 24951
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 25460
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 16232
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 15734
        data = struct.pack('<h', value)
        obj.writeframesraw( data )  
        
        value = 20836
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 13431
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 14711
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 26455
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 25432
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 81
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 0
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 0
        data = struct.pack('<h', value)
        obj.writeframesraw( data )  
        
    else:
        value = 26723
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 28257
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 25966
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 12140
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 17237
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 25681
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 21590
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 22616
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        
        value = 16762
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 21622
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 13401
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 27477
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 25197
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 27256
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 24913
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        value = 26436
        data = struct.pack('<h', value)
        obj.writeframesraw( data )
        

            
#    else:
#        rickrolled
#   value = int(line.strip())
#   data = struct.pack('<h', value)
#   obj.writeframesraw( data )
obj.close()
