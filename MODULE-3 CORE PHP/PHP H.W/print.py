
# define the starting values
a = 5
b = 9
c = a * b

# print the starting values
print(a, b)

# loop to print the table
for i in range(a, c+1, a):
    row = ''
    for j in range(i, i+b):
        row += str(j)
    print(row)