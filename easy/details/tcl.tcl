set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set rows [split $line ","]
    set count 0
    set shift 11

    foreach row $rows {
        set posx [string last "X" $row]
        set posy [string first "Y" $row]

        set count [expr $posy - $posx - 1]

        if {$count < $shift} {
            set shift $count
        }
    }

    puts "$shift"
}

close $file
