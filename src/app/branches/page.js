const branches = [
  { name: 'Central Plaza', address: '123 Main St' },
  { name: 'Market Mall', address: '45 Market Rd' },
];

export default function BranchesPage() {
  return (
    <div>
      <h1 className="text-2xl font-bold mb-4">Our Branches</h1>
      <ul className="space-y-2">
        {branches.map((b) => (
          <li key={b.name}>
            <strong>{b.name}</strong> - {b.address}
          </li>
        ))}
      </ul>
    </div>
  );
}
