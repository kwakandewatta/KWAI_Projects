#include<stdio.h>
int main (){
int i,n;
printf("Input the number of elements in the array:");
scanf("%d",&n);
int a[n];
for(i=0;i<n;i++){
printf("element - %d : ",i);
scanf("%d",&a[i]);
}
printf("\n from 1st array\n");
for(i=0;i<n;i++){
printf(" %d ",a[i]);
}
int m[n];
for(i=0;i<n;i++){
m[i]=a[i];
}
printf("\n from 2nd array\n");
for(i=0;i<n;i++){
printf(" %d ",m[i]);
}
return 0;
}
