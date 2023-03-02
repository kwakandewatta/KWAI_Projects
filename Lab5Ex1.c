#include<stdio.h>
int main(){
int row,col,i,j;
printf("Input the number of rows:");
scanf("%d",&row);
printf("Input the number of columns:");
scanf("%d",&col);
int a[row][col];
for(i=0;i<row;i++){
for(j=0;j<col;j++){
printf("Input the %d row %d column element:",i+1,j+1);
scanf("%d",&a[i][j]); }
printf("\n");}
int sum=0;
for(i=0;i<row;i++){
for(j=0;j<col;j++){
sum=sum+a[i][j];}
printf("\n");}
printf("\nTotal:%d",sum);
return 0;
}

