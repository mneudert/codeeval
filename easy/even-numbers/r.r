cat(sapply(as.integer(readLines(tail(commandArgs(), n=1))), function(n) {
  (1 + n) %% 2
}), sep='\n')
