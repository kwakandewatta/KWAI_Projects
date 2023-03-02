#include<stdio.h>
int main () {
int i,n,k,count=0;
printf("Input the number of elements in the array: ");
scanf("%d",&n);
int a[n];
for(i=0;i<n;i++){
printf("element - %d : ",i);
scanf("%d",&a[i]);
}
int m[n];
for(i=0;i<n;i++){
for(k=i+1;k<n;k++){
if(a[i]==a[k]){
m[count]=a[i];
count++;}
}
}
printf("\n Unique Elements\n");
for(i=0;i<count;i++){
printf(" %d ",m[i]);
}
return 0;
}
