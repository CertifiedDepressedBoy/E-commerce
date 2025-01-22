export default function InputLabel({
    value,
    className = '',
    children,
    ...props
}) {
    return (
        <label
            {...props}
            className={`label` + className}
        >
            <span className="label-text text-black">{value ? value : children}</span>
        </label>
    );
}
