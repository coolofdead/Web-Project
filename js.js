function* count(val)
{
    yield val;
    yield val+10;
    yield;
}

for (let value of count(1))
{
    // console.log(value);
}