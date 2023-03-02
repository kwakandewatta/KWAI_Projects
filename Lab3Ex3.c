#include<stdio.h>
int main(){
int n;
printf("Enter n:");
scanf("%d",&n);
int Answer =1;
int x=1;
do{
Answer= Answer*2;
x++;
}while(x<=n);
printf("\n2^%d is %d",x-1,Answer);
return 0;
}
