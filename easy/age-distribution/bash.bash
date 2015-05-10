while read -r age; do
    if (($age < 0 || $age > 100)); then
        echo "This program is for humans"
        continue
    fi

    if (($age <= 2)); then
        echo "Still in Mama's arms"
    elif (($age <= 4)); then
        echo "Preschool Maniac"
    elif (($age <= 11)); then
        echo "Elementary school"
    elif (($age <= 14)); then
        echo "Middle school"
    elif (($age <= 18)); then
        echo "High school"
    elif (($age <= 22)); then
        echo "College"
    elif (($age <= 65)); then
        echo "Working for the man"
    else
        echo "The Golden Years"
    fi
done < $1

# one empty line at the end required...
echo ""
