int soil=0;
void setup() {
Serial.begin(9600);
}

void loop() {
int sensorValue = analogRead(A0);
sensorValue= constrain( sensorValue, 480, 1023);
soil = map(sensorValue,450,1023,100,0);
Serial.print("Humidity % : ");
Serial.println(soil);
delay(100);
}
