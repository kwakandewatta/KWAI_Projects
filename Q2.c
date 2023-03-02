#include <stdio.h>

int squareNumber(int);

int main(){
	
	int x;
	printf("Enter a number:");
	scanf("%d", &x);
	int sq = squareNumber(x);
	printf("Square of %d value is %d",x,sq);
	
	return 0;
}

int squareNumber(int a){
	int value = a*a;
	return value;
}

