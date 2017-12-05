#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>


#include "DHT.h"
#define DHTPIN D2     // what digital pin we're connected to
#define DHTTYPE DHT22   // DHT 22  (AM2302), AM2321





DHT dht(DHTPIN, DHTTYPE);



void setup() {
  Serial.begin(9600);


  dht.begin();


  WiFi.begin("Winternet is Coming", "Aantarktis<3");   //WiFi 
//WiFi.begin("FRITZBox7362SL", "6226054527192856");

  while (WiFi.status() != WL_CONNECTED) {  //Wait for the WiFI connection completion
    delay(500);
    Serial.println("Waiting for connection");
  }
  Serial.println("ok");

}

void loop() {
  // Wait a few seconds between measurements.
  delay(2000);


  float h = dht.readHumidity();

  float t = dht.readTemperature();



  // Check if any reads failed and exit early (to try again).
  if ( isnan(t)) {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }


  // Compute heat index in Celsius (isFahreheit = false)
  float hic = dht.computeHeatIndex(t, h, false);

  Serial.print("Humidity: ");
  Serial.print(h);
  Serial.print(" %\t");
  Serial.print("Temperature: ");
  Serial.print(t);





  if (WiFi.status() == WL_CONNECTED) { //Check WiFi connection status

    HTTPClient http;  //Declare an object of class HTTPClient

    http.begin("http://marcelochsendorf.com/temp_logger/insert_sensor_reading.php?token=1337&temp=" + String(t));  //Specify request destination
    int httpCode = http.GET();                                                                  //Send the request
    if (httpCode > 0) { //Check the returning code
      String payload = http.getString();   //Get the request response payload
      Serial.println(payload);                     //Print the response payload
    }
    http.end();   //Close connection
  }

  delay(30000);



}
