#include<stdio.h>
int main(){ 
int x,y;
char op;
printf("Enter the number 1: ");
scanf("%d",&x);
printf("Enter the number 2: ");
scanf("%d",&y);
printf("Enter the Operation (* or /) :");
scanf("%c", &op);
switch(op){
case '*' :
printf("Multiplication: %d",(x*y));
break;
case '/' :
printf("Division: %d",(x/y));
break;
default:
printf("Wrong input!");
}
return 0;
}

