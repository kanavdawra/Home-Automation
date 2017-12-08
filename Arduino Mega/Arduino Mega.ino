
char str[16]="11111111111";
int a0=23,a1=25,a2=27,a3=29,a4=31,a5=33,a6=35,a7=37,d0=39,d1=41,d2=43,d3=45;
void setup() {
Serial.begin(115200);

}

void loop() {
int i=0;

  if (Serial.available()) {
    delay(100); //allows all serial sent to be received together
    while(Serial.available() && i<16) {
      str[i++] = Serial.read();
    }
    str[i++]='\0';
    if(i>0) {
    if(str[0]=='p' && str[1]=='u' && str[2]=='b'){
    Serial.print("Massage");Serial.println(str);
    if(str[3]=='0'){pinMode(a0,OUTPUT);digitalWrite(a0, 0);Serial.print("a0:");Serial.println(str[3]);}
    else if(str[3]=='1'){pinMode(a0,OUTPUT);digitalWrite(a0, 1);Serial.print("a0:");Serial.println(str[3]);}
    if(str[4]=='0'){pinMode(a1,OUTPUT);digitalWrite(a1, 0);Serial.print("a1:");Serial.println(str[4]);}
    else if(str[4]=='1'){pinMode(a1,OUTPUT);digitalWrite(a1, 1);Serial.print("a1:");Serial.println(str[4]);}
    if(str[5]=='0'){pinMode(a2,OUTPUT);digitalWrite(a2, 0);Serial.print("a2:");Serial.println(str[5]);}
    else if(str[5]=='1'){pinMode(a2,OUTPUT);digitalWrite(a2, 1);Serial.print("a2:");Serial.println(str[5]);}
    if(str[6]=='0'){pinMode(a3,OUTPUT);digitalWrite(a3, 0);Serial.print("a3:");Serial.println(str[6]);}
    else if(str[6]=='1'){pinMode(a3,OUTPUT);digitalWrite(a3, 1);Serial.print("a3:");Serial.println(str[6]);}
    if(str[7]=='0'){pinMode(a4,OUTPUT);digitalWrite(a4, 0);Serial.print("a4:");Serial.println(str[7]);}
    else if(str[7]=='1'){pinMode(a4,OUTPUT);digitalWrite(a4, 1);Serial.print("a4:");Serial.println(str[7]);}
    if(str[8]=='0'){pinMode(a5,OUTPUT);digitalWrite(a5, 0);Serial.print("a5:");Serial.println(str[8]);}
    else if(str[8]=='1'){pinMode(a5,OUTPUT);digitalWrite(a5, 1);Serial.print("a5:");Serial.println(str[8]);}
    if(str[9]=='0'){pinMode(a6,OUTPUT);digitalWrite(a6, 0);Serial.print("a6:");Serial.println(str[9]);}
    else if(str[9]=='1'){pinMode(a6,OUTPUT);digitalWrite(a6, 1);Serial.print("a6:");Serial.println(str[9]);}
    if(str[10]=='0'){pinMode(a7,OUTPUT);digitalWrite(a7, 0);Serial.print("a7:");Serial.println(str[10]);}
    else if(str[10]=='1'){pinMode(a7,OUTPUT);digitalWrite(a7, 1);Serial.print("a7:");Serial.println(str[10]);}
    if(str[11]=='0'){pinMode(d0,OUTPUT);digitalWrite(d0, 0);Serial.print("d0:");Serial.println(str[11]);}
    else if(str[11]=='1'){pinMode(d0,OUTPUT);digitalWrite(d0, 1);Serial.print("d0:");Serial.println(str[11]);}
    if(str[12]=='0'){pinMode(d1,OUTPUT);digitalWrite(d1, 0);Serial.print("d1:");Serial.println(str[12]);}
    else if(str[12]=='1'){pinMode(d1,OUTPUT);digitalWrite(d1, 1);Serial.print("d1:");Serial.println(str[12]);}
    if(str[13]=='0'){pinMode(d2,OUTPUT);digitalWrite(d2, 0);Serial.print("d2:");Serial.println(str[13]);}
    else if(str[13]=='1'){pinMode(d2,OUTPUT);digitalWrite(d2, 1);Serial.print("d2:");Serial.println(str[13]);}
    if(str[14]=='0'){pinMode(d3,OUTPUT);digitalWrite(d3, 0);Serial.print("d3:");Serial.println(str[14]);}
    else if(str[14]=='1'){pinMode(d3,OUTPUT);digitalWrite(d3, 1);Serial.print("d3:");Serial.println(str[14]);}
    pinMode(48,OUTPUT);digitalWrite(48, 1);
    delay(500);
    digitalWrite(48, 0);
    Serial.println(str);
   i=-1;
    
  }
  if(str[0]=='c' && str[1]=='o' && str[2]=='n' && str[3]=='f'){pinMode(40,OUTPUT);digitalWrite(40, 1);Serial.println(str);}
  if(str[0]=='r' && str[1]=='e' && str[2]=='s' && str[3]=='t'){pinMode(44,OUTPUT);
  
  digitalWrite(40, 0);
  delay(300);
  digitalWrite(44, 1);
  delay(500);
  digitalWrite(44, 0);
  Serial.println(str);}
    }
  }
  
}
