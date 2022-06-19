#!/bin/bash

# This script is meant to publish, on the MQTT Broker, a random value between a min and max that are specified. The value is published within a bulding, a room and a sensor.

# Declaration of all the factors used, excepting the value

broker="localhost"
#user="student"
#pass="student"
declare -a salles=("E208" "E104" "B103" "B204")
tailleSalles=$(echo ${#salles[@]})
declare -a topics=("iut/bate/E208/temperature" 
"iut/bate/E208/co2"
"iut/bate/E104/temperature" 
"iut/bate/E104/co2" 
"iut/batb/B103/temperature" 
"iut/batb/B103/co2" 
"iut/batb/B204/temperature" 
"iut/batb/B204/co2")
tailleTopics=$(echo ${#topics[@]})
declare -A valTemp
declare -A valCo2
maxTemp=25
minTemp=18
maxCo2=900
minCo2=300

for ((n=0;n<$tailleSalles;n++)) # Generating a random value for the temperature and the co2
do
    valTemp[${salles[$n]}]=$(($RANDOM%($maxTemp -$minTemp + 1) + $minTemp ))
    valCo2[${salles[$n]}]=$(($RANDOM%($maxCo2 -$minCo2 + 1) + $minCo2 ))
done

while true
do
    for ((n=0;n<$tailleSalles;n++))
    do
        newTemp=$(($RANDOM%($maxTemp -$minTemp + 1) + $minTemp ))
        newCo2=$(($RANDOM%($maxCo2 -$minCo2 + 1) + $minCo2 ))

        diffTemp=$(($newTemp - valTemp[${salles[$n]}]))
        diffTemp2=$(echo $diffTemp | tr -d -)
        diffCo2=$(($newCo2 - valCo2[${salles[$n]}]))
        diffCo22=$(echo $diffCo2 | tr -d -)    
        while [ $diffTemp2 -ge 2 ]
        do
            newTemp=$(($RANDOM%($maxTemp -$minTemp + 1) + $minTemp ))      
            diffTemp=$(($newTemp - valTemp[${salles[$n]}]))
            diffTemp2=$(echo $diffTemp | tr -d -)       
        done
        while [ $diffCo22 -ge 100 ]
        do
            newCo2=$(($RANDOM%($maxCo2 -$minCo2 + 1) + $minCo2 ))       
            diffCo2=$(($newCo2 - valCo2[${salles[$n]}]))
            diffCo22=$(echo $diffCo2 | tr -d -)        
        done
        valTemp[${salles[$n]}]=$newTemp
        valCo2[${salles[$n]}]=$newCo2
    done

    for ((n=0;n<$tailleTopics;n++)) # Assignement of a building/room to the value
    do
        topic=$(echo ${topics[$n]})
        room=$(echo $topic | cut -d "/" -f 3)
        sensor=$(echo $topic | cut -d "/" -f 4)   
        if [ $sensor == "temperature" ]
        then
            val=$(echo ${valTemp[$room]})
        elif [ $sensor == "co2" ]
        then
            val=$(echo ${valCo2[$room]})
        fi 
        mosquitto_pub -h $broker -t $topic -m $val
        sleep 2 # Waiting 2 secnds before publishing another data
    done
    sleep 10 # Waiting 10 seconds before restarting the loop
done
