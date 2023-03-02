#include<stdio.h>
int max(int[],int);
int main(){
int size,i;
printf("Input the size of array: ");
scanf("%d",&size);
int a[size];
for(i=0;i<size;i++){
printf("Inpute the element:");
scanf("%d",&a[i]);
}
max(a,size);
return 0;
}
int max(int x[], int y){
int max,j;
max=x[0];
for(j=1;j<y;j++){
if(max<x[j]){
max=x[j];
}
}
return printf("Maximum number is %d",max);
}

