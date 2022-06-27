def get_middle(x):
    return x[len(x) // 2] if len(x) % 2 != 0 else x[len(x) // 2 -1 : len(x) // 2 + 1]