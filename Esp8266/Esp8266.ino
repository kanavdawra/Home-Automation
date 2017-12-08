

#include <ESP8266WiFi.h>          //https://github.com/esp8266/Arduino
#include <PubSubClient.h>
//needed for library
#include <ESP8266WebServer.h>
#include <DNSServer.h>
#include <WiFiManager.h>    
 #include<SoftwareSerial.h> 
SoftwareSerial s(3,1); 
const int PIN_LED = 0;
const int TRIGGER_PIN = 2;
const int TRIGGER_PIN2 = 13; 
bool initialConfig = false;
const char* mqttServer = "####";
const int mqttPort = ####;
const char* mqttUser = "####";
const char* mqttPassword = "####";

WiFiClient espClient;
PubSubClient client(espClient);


void setup() {
  pinMode(PIN_LED, OUTPUT);
  Serial.begin(115200);
  Serial.print("rest");
  Serial.print("rest+");
  Serial.print("pub");
  Serial.print("rest");
  Serial.print("rest");
  //Serial.println("\n Starting");
//  WiFi.printDiag(Serial); //Remove this line if you do not want to see WiFi password printed
  if (WiFi.SSID()==""){
   // Serial.println("We haven't got any access point credentials, so get them now");   
    initialConfig = true;
  }
  
  else{
    digitalWrite(PIN_LED, LOW); // Turn led off as we are not in configuration mode.
    WiFi.mode(WIFI_STA); // Force to station mode because if device was switched off while in access point mode it will start up next time in access point mode.
    unsigned long startedAt = millis();
   // Serial.print("After waiting ");
    int connRes = WiFi.waitForConnectResult();
    float waited = (millis()- startedAt);
   /* Serial.print(waited/1000);
    Serial.print(" secs in setup() connection result is ");
    Serial.println(connRes);*/
  }
  pinMode(TRIGGER_PIN, INPUT_PULLUP);
  pinMode(TRIGGER_PIN2, INPUT_PULLUP);
  if (WiFi.status()!=WL_CONNECTED){
   // Serial.println("failed to connect, finishing setup anyway");
  } else{
   // Serial.print("local ip: ");
   // Serial.println(WiFi.localIP());

//mqtt//

    client.setServer(mqttServer, mqttPort);
  client.setCallback(callback);
 
  while (!client.connected()) {
    //Serial.println("Connecting to MQTT...");
 
    if (client.connect("esp8266", mqttUser, mqttPassword )) {
 
      //Serial.println("connected");  
 digitalWrite(PIN_LED, HIGH);
    } else {
 
     // Serial.print("failed with state ");
      //Serial.print(client.state());
      delay(1000);
      Serial.print("restmqtt");
      ESP.restart();
 
    }
  }
 
  client.publish("data", "Hello from ESP8266");
  client.subscribe("data");
  }
}

void callback(char* topic, byte* payload, unsigned int length) {
 char abc[16];
  //Serial.print("Message arrived in topic: ");
  //Serial.println(topic);
 //Serial.write(payload,length);
  //Serial.print("Message:");
  abc[0]='p';abc[1]='u';abc[2]='b';
  for (int i = 0; i < length; i++) {
    //Serial.print((char)payload[i]);
    abc[i+3]=(char)payload[i];
    
  }
 Serial.println(abc);
 s.write(abc,16);
  //Serial.println();
  //Serial.println("-----------------------");
 
}


void loop() {char str[16];
  // is configuration portal requested?
 
  if ((digitalRead(TRIGGER_PIN) == LOW) || (digitalRead(TRIGGER_PIN2) == LOW) || (initialConfig)) {
     //Serial.println("Configuration portal requested.");
   /* for(int x=0;x<10;x++)
    {digitalWrite(PIN_LED, LOW);
    delay(500);
    digitalWrite(PIN_LED, HIGH);
    delay(100);}*/
     digitalWrite(PIN_LED, LOW);
     //#############configration bortal led serial print#################
     str[0]='ç';str[1]='o';str[2]='n';str[3]='f';
     Serial.println("conf");
     
     
    WiFiManager wifiManager;

    if (!wifiManager.startConfigPortal("Matrix HomeAuto","password")) {
      //Serial.println("Not connected to WiFi but continuing anyway.");
    } else {
      //Serial.println("connected...yeey :)");
    }
    digitalWrite(PIN_LED, HIGH); // Turn led off as we are not in configuration mode.
    ESP.restart(); 
    delay(5000);
  }
  if(WiFi.status() != WL_CONNECTED || client.connected()!=1){Serial.print("restwifi/mqtt");delay(1000);ESP.restart();}
if(WiFi.status() == WL_CONNECTED){client.loop();}


  // put your main code here, to run repeatedly:

}
