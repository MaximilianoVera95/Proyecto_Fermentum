#include<ESP8266WiFi.h>
#include <OneWire.h>
#include <DallasTemperature.h>

OneWire ourWire(14); 

DallasTemperature sensors(&ourWire);

DeviceAddress direccion_Sensor1 = {0x28, 0xFF, 0x64, 0x1E, 0x5B, 0xCD, 0x45, 0x95};//dirección del sensor 1
DeviceAddress direccion_Sensor2 = {0x28, 0xFF, 0x64, 0x1E, 0x5B, 0xFB, 0x45, 0x12};//dirección del sensor 2

const char* ssid = "Fibertel WiFi 5ybc 2.4GHZ";
const char* password = "9ehdee9f";
//const char* ssid = "Claro294";
//const char* password = "FermentumFaber294";
//const char* ssid = "wifi";
//const char* password = "ASPW656fyi";


const char* host = "192.168.1.20";

float SensorT1;
float SensorT2;
float SensorT3;
float SensorT4; //si coloco float no funciona el mensaje de telegram con MarkdownV2 pero si funciona con Markdown
float SensorT5;
float SensorT6;
float SensorT7;
float SensorT8;
float SensorT9;
float SensorT10;


void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  delay(10);

  // Nos conectamos al WiFi

  Serial.println();
  Serial.println();
  Serial.print("Conectando a: ");
  Serial.println(ssid);

  WiFi.begin(ssid,password);

  while(WiFi.status() != WL_CONNECTED){
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi conectado");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());

  sensors.begin();   //Se inicia el sensor 1
}

void loop() {
  // put your main code here, to run repeatedly:

  sensors.requestTemperatures();
  
  SensorT1 = sensors.getTempC(direccion_Sensor1);//Se obtiene la temperatura en °C del sensor 1
  SensorT2 = sensors.getTempC(direccion_Sensor2);//Se obtiene la temperatura en °C del sensor 2
  SensorT3 = sensors.getTempC(direccion_Sensor1)/1.6;
  SensorT4 = sensors.getTempC(direccion_Sensor2)/2;
  SensorT5 = sensors.getTempC(direccion_Sensor1)/2.5;
  SensorT6 = sensors.getTempC(direccion_Sensor2)/3.8;
  SensorT7 = sensors.getTempC(direccion_Sensor1)/3.3;
  SensorT8 = sensors.getTempC(direccion_Sensor2)/1.8;
  SensorT9 = sensors.getTempC(direccion_Sensor1)/1.3;
  SensorT10 = sensors.getTempC(direccion_Sensor2)/2.7;

  delay(10000);
  
  Serial.print("Conectando a ");
  Serial.println(host);

  WiFiClient client;
  const int httpPort = 81;
  if(!client.connect(host,httpPort)){
    Serial.println("Coneccion fallida");
    return;
  }
  
  String url = "/php_post/entrada_datos.php";
  String data = "SensorT1="+String(SensorT1)+"&SensorT2="+String(SensorT2)+"&SensorT3="+String(SensorT3)+"&SensorT4="+String(SensorT4)+"&SensorT5="+String(SensorT5)+"&SensorT6="+String(SensorT6)+"&SensorT7="+String(SensorT7)+"&SensorT8="+String(SensorT8)+"&SensorT9="+String(SensorT9)+"&SensorT10="+String(SensorT10)+"";
    

  client.print(String("POST ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Accept: *" + "/" + "*\r\n" +
               "Content-Length: " + data.length() + "\r\n" +
               "Content-Type: application/x-www-form-urlencoded\r\n" +
                "\r\n" + data);
  delay(10);  

 Serial.println("Respond:");
  while(client.available()){
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }

  Serial.println();

  Serial.println("Cerramos la conección");

}
