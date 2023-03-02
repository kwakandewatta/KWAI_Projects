import inline as inline
import matplotlib 
import numpy as np
import pandas as pd

data = pd.read_csv('C:/Users/kwaka/Desktop/Book1.csv')
#print(data.head())

df = pd.read_csv('C:/Users/kwaka/Desktop/Book1.csv')
print(df.head())
df.drop("date",axis=1,inplace=True)
df.drop("id",axis=1,inplace=True)
df.drop("floodstadate",axis=1,inplace=True)

df.info()

data.apply(lambda x: sum(x.isnull()), axis=0)

# data['FLOODS'].replace(['YES', 'NO'], [1, 0], inplace=True)
# print(data.head())

x = data.iloc[:,1:4]
print(x.head())

y = data.iloc[:, -2]
print(y.head())

#import matplotlib.pyplot as plt
#c = data[['rainfall']]
#c.hist()
#plt.show()
#plt.savefig('myfig.png')

from sklearn import preprocessing
minmax = preprocessing.MinMaxScaler(feature_range=(0,1))
minmax.fit(x).transform(x)

from sklearn import model_selection,neighbors
from sklearn.model_selection import train_test_split
x_train,x_test,y_train,y_test=train_test_split(x,y,test_size=0.2)

x_train.head()
y_train.head()

x_train_std = minmax.fit_transform(x_train)
x_test_std = minmax.transform(x_test)
from sklearn.model_selection import cross_val_score
from sklearn.linear_model import LogisticRegression

lr = LogisticRegression()
lr_clf = lr.fit(x_train_std,y_train)

lr_accuracy = cross_val_score(lr_clf,x_test_std,y_test,cv=3,scoring='accuracy',n_jobs=-1)
lr_accuracy.mean()

y_predict = lr_clf.predict(x_test_std)
print('Predicted chances of flood')
print(y_predict)

print('Actual chances of flood')
print(y_test.values)

#from sklearn.metrics import accuracy_score,recall_score,roc_auc_score,confusion_matrix
#print("\naccuracy score: %f"%(accuracy_score(y_test,y_predict)*100))
#print("recall score: %f"%(recall_score(y_test,y_predict)*100))
#print("roc score: %f"%(roc_auc_score(y_test,y_predict)*100))

