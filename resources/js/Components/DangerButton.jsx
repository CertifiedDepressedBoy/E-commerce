export default function DangerButton({
    className = '',
    disabled,
    children,
    ...props
}) {
    return (
        <button
            {...props}
            className={
                `btn btn-error text-white` + className
            }
            disabled={disabled}
        >
            <span className="text-white">{children}</span>
        </button>
    );
}
