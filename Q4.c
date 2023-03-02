#include <stdio.h>

int Max(int A[]);

void main(){
	
	int A[] = {12, 23, 43, 44, 01, 29, 38, 34};
	printf("Maximum : %d",Max(A));
}

int Max(int A[]){
	int max = 0;
	int i;
	for(i = 0;i<8;i++){
		if(max < A[i]){
			max = A[i];
		}
	}
	return max;
}
