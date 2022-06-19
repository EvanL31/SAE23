#!/bin/bash

# This script is meant to collect data published by another script ont the MQTT broker, distribute them according to their sensor, the room and the building, then sending them to a DATABASE in a goal to publish the data on a website.

while true
do
	message=`mosquitto_sub -h localhost -t iut/# -C 1 -v` # Subscribing to the MQQT broker
	valeur=$(echo $message | cut -d "/" -f 4)
	type=$(echo $valeur | cut -d " " -f 1)
	valeur=$(echo $valeur | cut -d " " -f 2)
	salle=$(echo $message | cut -d "/" -f 3)
	batiment=$(echo $message | cut -d "/" -f 2)

# Distributing the data according to their sensor, room and building

	if [ $batiment == "bate" ]
	then
		if [ $salle == "E208" ]
		then
			if [ $type == "temperature" ]
			then
			capteur=TE208
			else 
			capteur=CE208
			fi
		else
			if [ $type == "temperature" ]
			then
			capteur=TE104
			else 
			capteur=CE104
			fi
		fi
	else
		if [ $salle == "B103" ]
		then
			if [ $type == "temperature" ]
			then
			capteur=TB103
			else 
			capteur=CB103
			fi
		else
			if [ $type == "temperature" ]
			then
			capteur=TB204
			else 
			capteur=CB204
			fi
		fi
	fi
# Connection to the DATABASE, then sending the data with its type of sensor

mysql -u laffely -pevan -h 192.168.0.17 -D SAE23 -e "Insert Into MESURE (MES_VAL, CAPT_NOM) VALUES ('$valeur', '$capteur');"

done
