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
# df.drop("floodstadate",axis=1,inplace=True)

df.info()

data.apply(lambda x: sum(x.isnull()), axis=0)

data['FLOODS'].replace(['YES', 'NO'], [1, 0], inplace=True)
print("data.head()")
print(data.head())

x = data.iloc[:,1:2]
print(x.head())

y = data.iloc[:, -1]
print(y.head())

from sklearn import preprocessing
minmax = preprocessing.MinMaxScaler(feature_range=(0,1))
minmax.fit(x).transform(x)

from sklearn import model_selection,neighbors
from sklearn.model_selection import train_test_split
x_train,x_test,y_train,y_test=train_test_split

x_train.head()
y_train.head()

clf = neighbors.KNeighborsClassifier()
knn_clf = clf.fit(x_train,y_train)
#Let's predict chances of flood
y_predict = knn_clf.predict(x_test)
print('predicted chances of flood')
print(y_predict)
print("actual values of floods:")
print(y_test)

from sklearn.model_selection import cross_val_score
knn_accuracy = cross_val_score(knn_clf,x_test,y_test,cv=3,scoring='accuracy',n_jobs=-1)
knn_accuracy.mean()
