using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine(BitConverter.IsLittleEndian ? "LittleEndian" : "BigEndian");
    }
}
