using System;

class Program
{
    static void Main(string[] args)
    {
        for (int x = 1; x <= 12; x++) {
            Console.Write(x);

            for (int y = 2; y <= 12; y++) {
                Console.Write("{0,4}", (x * y));
            }

            Console.WriteLine();
        }
    }
}
