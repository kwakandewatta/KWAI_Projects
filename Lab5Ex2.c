#include<stdio.h>
int main(){
int row,col,i,j;
printf("Input the number of rows:");
scanf("%d",&row);
printf("Input the number of columns:");
scanf("%d",&col);
int a[row][col];
int b[row][col];
int c[row][col];
for(i=0;i<row;i++){
for(j=0;j<col;j++){
printf("\n");
printf("Input the %d row %d column element:",i+1,j+1);
scanf("%d",&a[i][j]); 
}
printf("\n"); }
for(i=0;i<row;i++){
for(j=0;j<col;j++){
printf("Input the %d row %d column element:",i+1,j+1);
scanf("%d",&b[i][j]); }
printf("\n");}
for(i=0;i<row;i++){
for(j=0;j<col;j++){
c[i][j]=a[i][j]+b[i][j];
}
printf("\n");
} printf("array 1 + array 2\n");
for(i=0;i<row;i++){
for(j=0;j<col;j++){
printf(" %d ",c[i][j]); 
}
printf("\n");
}
return 0;
}

