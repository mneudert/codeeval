set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set caps [list]
    set words [split $line " "]

    foreach word $words {
        set w [string toupper [string range $word 0 0]]
        append w [string range $word 1 end]

        lappend caps $w
    }

    puts [join $caps " "]
}

close $file
