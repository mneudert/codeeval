for (( x = 1; x <= 12; x++ )); do
    for (( y = 1; y <= 12; y++ )); do
        if [ 1 -eq $y ]; then
            echo -n $x
        else
            printf "%4s" "$(expr $x '*' $y)"
        fi

        if [ 12 -eq $y ]; then
            echo ""
        fi
    done
done
