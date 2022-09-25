#include<ESP8266WiFi.h>

const char* ssid = "Fibertel WiFi 5ybc 2.4GHZ";
const char* password = "9ehdee9f";

const char* host = "192.168.1.27";

float sensor; //si coloco float no funciona el mensaje de telegram con MarkdownV2 pero si funciona con Markdown
float minimo;
float maximo;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
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
}

void loop() {
  // put your main code here, to run repeatedly:
  delay(10000);
  Serial.print("Conectando a ");
  Serial.println(host);

  WiFiClient client;
  const int httpPort = 81;
  if(!client.connect(host,httpPort)){
    Serial.println("Coneccion fallida");
    return;
  }

  sensor = analogRead(A0);
  minimo = 102.4;
  maximo = 1010.8;
  String url = "http://192.168.1.27/php_post/entrada_datos.php";
  String data = "serie=7hg6&temperatura="+String(sensor)+"&maximo="+String(maximo)+"&minimo="+String(minimo)+"";

  client.print(String("POST ") + url + " HTTP/1.0\r\n" +
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
