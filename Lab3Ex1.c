#include<stdio.h>
int main(){ 
int num1,num2,num3;
printf("Enter the 1st number: ");
scanf("%d",&num1);
printf("\nEnter the 2nd number: ");
scanf("%d",&num2);
printf("\nEnter the 3rd number: ");
scanf("%d",&num3);
printf("\n1st number=%d ,2nd number=%d ,3rd number=%d ",num1,num2,num3);
if(num2<num1 && num1>num2){
printf("\nThe 1st number is the greatest among three");
}
else if(num1<num3 && num3>num2){
printf("\nThe 3rd number is the greatest among three");
}else
{
printf("\nThe 2nd number is the greatest among three");
}
return 0;
}
