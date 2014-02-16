array set code {
    .-    A
    -...  B
    -.-.  C
    -..   D
    .     E
    ..-.  F
    --.   G
    ....  H
    ..    I
    .---  J
    -.-   K
    .-..  L
    --    M
    -.    N
    ---   O
    .--.  P
    --.-  Q
    .-.   R
    ...   S
    -     T
    ..-   U
    ...-  V
    .--   W
    -..-  X
    -.--  Y
    --..  Z
    ----- 0
    .---- 1
    ..--- 2
    ...-- 3
    ....- 4
    ..... 5
    -.... 6
    --... 7
    ---.. 8
    ----. 9
}

set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set space 0
    set word ""

    foreach char [split $line {}] {
        if {" " == $char && !$space} {
            puts -nonewline $code($word)
            set word ""
            set space 1

            continue
        }

        if {" " == $char && $space} {
            puts -nonewline " "
            set space 0

            continue
        }

        set space 0
        append word $char
    }

    if {0 == [string length $word]} {
        puts ""
    } else {
        puts $code($word)
    }
}

close $file
