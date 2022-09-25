#include <OneWire.h>

OneWire ourWire(14);                //Se establece el pin D5  como bus OneWire

// Sensor1 (Sensor del tanque 1) = 0x28 0xFF 0x64 0x1E 0x5B 0xCD 0x45 0x95
// Sensor2 (Sensor del tanque 2) = 0x28 0xFF 0x64 0x1E 0x5B 0xFB 0x45 0x12
 

void setup(void) {
  Serial.begin(9600);
}

void loop(void) {
  byte addr[8];  
  Serial.println("Obteniendo direcciones:");
  while (ourWire.search(addr)) 
  {  
  Serial.print("Address = ");
  for( int i = 0; i < 8; i++) {
    Serial.print(" 0x");
    Serial.print(addr[i], HEX);
  }
  Serial.println();
}

Serial.println();
ourWire.reset_search();
delay(2000);
}
