utensils = {"fork", "spoon", "knife"}
dishes = {"bowl", "plate", "cup"}

utensils.add("napkin")
utensils.remove("fork")
# utensils.clear
dishes.update(utensils)

dinner_table = utensils.union(dishes)

for x in dishes:
    print(x)
