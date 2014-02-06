import java.io.File

object Main extends App {
  if (1 != args.length) {
    println("Input file missing!")
    System.exit(1);
  }

  println(new File(args(0)).length)
}
