set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set tokens [split $line ","]
    set words {}
    set numbers {}

    foreach token $tokens {
        if {[string is integer -strict $token]} {
            lappend numbers $token
        } else {
            lappend words $token
        }
    }

    if {0 == [llength $words] && 0 == [llength $numbers]} {
        continue
    }

    if {0 < [llength $words]} {
        puts -nonewline [join $words ","]
    }

    if {0 < [llength $words] && 0 < [llength $numbers]} {
        puts -nonewline "|"
    }

    if {0 < [llength $numbers]} {
        puts -nonewline [join $numbers ","]
    }

    puts ""
}

close $file
