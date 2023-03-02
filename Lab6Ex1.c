#include<stdio.h>
struct Account{
char first_name[20];
char last_name[20];
char address[20];
int age;
char account_type[10];
};
struct Account items[20]={
};
void main(){
struct Account acc1;
int i;
for(i=0;i<10;i++){
printf("Enter the first name: ");
scanf("%s",items[i].first_name);
printf("Enter the last name: ");
scanf("%s",items[i].last_name);
printf("Enter the address: ");
scanf("%s",items[i].address);
printf("Enter age: ");
scanf("%d",&items[i].age);
printf("Enter the account type: ");
scanf("%s",items[i].account_type);
printf("\n");
}
}
printf("\n________________________________________\n");
for(i=0;i<10;i++){
printf("Name: %s %s\n",items[i].first_name,items[i].last_name);
printf("Address : %s\n",items[i].address);
printf("Age : %d\n",items[i].age);
printf("Account type: %s\n",items[i].account_type);
printf("\n");
}
return 0;







