#include <stdio.h>
#include <math.h>

typedef struct Account{
	int AccNum;
	char AccHoder[20];
	int amount;
}A;

A account[2];

void Deposite(int num, int new_amount){
	int x;
	for(x=0;x<2;x++){
		if(account[x].AccNum == num){
			account[x].amount = account[x].amount + new_amount;
		}
	}
}

void Withdraw(int num, int new_amount){
	int x;
	for(x=0;x<2;x++){
		if(account[x].AccNum == num){
			account[x].amount = account[x].amount - new_amount;
		}
	}
}
void printDetails(int num){
	int x;
	for(x=0;x<2;x++){
		if(account[x].AccNum == num){
			printf("\nAccount number: %d",account[x].AccNum);
			printf("\nAcount holder: %s",account[x].AccHoder);
			printf("\nAcount amount: %d",account[x].amount);
		}
	}
}

void main(){
	int i;
	for(i = 0; i<2; i++){
		printf("Enter account number:");
		scanf("%d",&account[i].AccNum);
		printf("Enter account holder name:");
		scanf("%s",account[i].AccHoder);
		printf("Enter account amount:");
		scanf("%d",&account[i].amount);
	}
	
	printf("\nEnter P for print details, \nD for deposite amount, \nW for withdraw amount.");
	int loopInput = 0;
	char op = ' ';
	while(loopInput == 0){
		printf("\nEnter a operation(P/D/W):");
		scanf(" %c",&op);
		int num;
		int amount;
		switch(op) {
			case 'P': printf("\nEnter account number:"); 
			          scanf("%d",&num);
			          printDetails(num); break;
		    case 'D': printf("\nEnter account number :"); 
			          scanf("%d",&num);
			          printf("\nEnter account amount :"); 
			          scanf("%d",&amount);
			          Deposite(num,amount); break;
			case 'W': printf("\nEnter account number :"); 
			          scanf("%d",&num);
			          printf("\nEnter account amount :"); 
			          scanf("%d",&amount);
			          Withdraw(num,amount); break;
			default: printf("\nWrong input!"); 
		}
		
	}
}

