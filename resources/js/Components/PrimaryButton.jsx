export default function PrimaryButton({
    className = '',
    disabled,
    children,
    ...props
}) {
    return (
        <button
            {...props}
            className={
                `btn btn-primary text-white` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
