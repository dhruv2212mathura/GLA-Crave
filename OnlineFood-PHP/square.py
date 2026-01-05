t = int(input("Enter the number of testcases: "))

for _ in range(t):
    # Read coordinates of the four corners
    x1, y1 = map(int, input().split())
    x2, y2 = map(int, input().split())
    x3, y3 = map(int, input().split())
    x4, y4 = map(int, input().split())

    # Find the minimum and maximum x-coordinates and y-coordinates
    xmin = min(x1, x2, x3, x4)
    xmax = max(x1, x2, x3, x4)
    ymin = min(y1, y2, y3, y4)
    ymax = max(y1, y2, y3, y4)

    # Calculate side length of the square
    side_length = max(xmax - xmin, ymax - ymin)

    # Calculate and print the area of the square
    area = side_length ** 2
    print(area)